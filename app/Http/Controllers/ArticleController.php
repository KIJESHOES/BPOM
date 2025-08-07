<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\TicketReplyStoreRequest;
use App\Http\Requests\TicketStoreRequest;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\TicketReplyResource;
use App\Http\Resources\TicketResource;
use App\Models\Article;
use App\Models\Ticket;
use App\Models\TicketReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Article::query();

            $query->orderBy('published_at', 'desc');

            if ($request->search) {
                    $query->where('author', 'like', '%' .$request->search. '%')
                        ->orWhere('title', 'like', '%' .$request->search. '%' );
            }


            if ($request->status) {
                $query->where('category', $request->status);
            }

            $articles = $query->paginate(10);

            return response()->json([
                'message' => 'Data Article Berhasil Ditampilkan',
                'data' => ArticleResource::collection($articles) // Gunakan resource untuk format data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menampilkan daftar article',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    public function show($slug) // Tampilkan detail article berdasarkan kode
    {
        $article = Article::where('author', $slug)->firstOr(); // Ambil article atau gagal jika tidak ditemukan'

        try {
            if (!$article) {
                return response()->json([
                    'message' => 'Article tidak ditemukan',
                ], 404); // Jika article tidak ditemukan
            }
            if (auth()->user()->role == 'user' && $article->user_id != auth()->user()->id) {
                return response()->json([
                    'message' => 'Anda Tidak Diperbolehkan Mengakses Article Ini',
                ], 403);
            }

            return response()->json([
                'message' => 'Article Berhasil Ditampilkan',
                'data' => new ArticleResource($article)
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => 'Terjadi Kesalahan',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function store(ArticleRequest $request) // Simpan article baru
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();

            $article = new Article();
            $article->user_id = auth()->user()->id;
            $article->title = $data['title'];
            $article->slug = Str::slug($data['title']);
            $article->content = $data['content'] ?? null;
            $article->category = $data['category'];
            $article->link = $data['link'];
            $article->published_at = now();
            $article->save();

            DB::commit();

            return response()->json([
                'message' => 'Article Berhasil Ditambahkan',
                'data' => new ArticleResource($article)
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => 'Terjadi kesalahan saat menambahkan article',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    public function guestShow($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('guest.article', compact('article'));
    }

}
