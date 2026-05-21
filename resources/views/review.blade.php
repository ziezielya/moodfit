<!-- <h4 class="mt-4 fw-bold">Review Customer</h4>

<div class="mt-3">

    @forelse($item->reviews ?? [] as $review)

        <div class="p-3 mb-3"
             style="background:#fff;
                    border-radius:15px;
                    border:1px solid #f3d98b;
                    box-shadow:0 5px 15px rgba(0,0,0,0.05);">

            {{-- STAR --}}
            <div class="mb-2">
                @for($i=1;$i<=5;$i++)
                    <i class="fas fa-star"
                       style="color: {{ $i <= $review->rating ? '#f4c84d' : '#ddd' }}"></i>
                @endfor
            </div>

            {{-- COMMENT --}}
            <p class="mb-0 text-muted" style="font-size:14px;">
                {{ $review->comment }}
            </p>

        </div>

    @empty

        <div class="text-muted">
            Belum ada review untuk produk ini.
        </div>

    @endforelse

</div>

{{-- FORM REVIEW --}}
<div class="mt-4 p-4"
     style="background:rgba(255,255,255,0.85);
            border-radius:20px;
            border:1px solid #f3d98b;">

    <h5 class="fw-bold mb-3">Tulis Review</h5>

    <form action="{{ route('review.store') }}" method="POST">
        @csrf

        <input type="hidden" name="produk_id" value="{{ $item->id }}">

        {{-- RATING --}}
        <select name="rating" class="form-control mb-2" required>
            <option value="">Pilih Rating</option>
            <option value="5">★★★★★ - Sangat Bagus</option>
            <option value="4">★★★★ - Bagus</option>
            <option value="3">★★★ - Cukup</option>
            <option value="2">★★ - Kurang</option>
            <option value="1">★ - Buruk</option>
        </select>

        {{-- COMMENT --}}
        <textarea name="comment"
                  class="form-control mb-2"
                  rows="3"
                  placeholder="Tulis pengalaman kamu..."
                  required></textarea>

        <button class="btn btn-buy w-100">
            Kirim Review
        </button>

    </form>

</div> -->