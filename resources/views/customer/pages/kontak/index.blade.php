@extends('customer.layouts.app')

@section('title', 'Kontak Kami')

@section('content')

<div style="
    padding: 110px 25px 60px;
    background: linear-gradient(to bottom, #dccfa7, #5c4a21);
    min-height: 100vh;
">

    <!-- HEADER -->
    <div style="text-align:center; margin-bottom:50px;">

        <h1 style="
            font-size:42px;
            font-weight:800;
            color:#7a5c00;
            margin-bottom:12px;
            letter-spacing:1px;
        ">
            Hubungi MoodFit
        </h1>

        <p style="
            max-width:700px;
            margin:auto;
            color:#8a7a55;
            font-size:16px;
            line-height:1.8;
        ">
            Kami selalu siap membantu Anda dengan pelayanan terbaik. 
            Hubungi kami untuk pertanyaan, kolaborasi fashion, 
            maupun informasi produk terbaru MoodFit Fashion.
        </p>

    </div>

    <!-- CONTENT -->
    <div style="
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap:30px;
        max-width:1200px;
        margin:auto;
    ">

        <!-- KONTAK -->
        <div style="
            background: rgba(255,255,255,0.75);
            backdrop-filter: blur(12px);
            border:1px solid #f4deb3;
            border-radius:28px;
            padding:35px;
            box-shadow:0 10px 30px rgba(212, 180, 90, 0.12);
            transition:0.3s;
        ">

            <h2 style="
                font-size:24px;
                font-weight:700;
                color:#7a5c00;
                margin-bottom:25px;
            ">
                Informasi Kontak
            </h2>

            <div style="display:flex; flex-direction:column; gap:25px;">

                <div>
                    <p style="font-size:14px; color:#b28b28; font-weight:700; margin-bottom:5px;">
                        📍 ALAMAT
                    </p>

                    <p style="color:#5c5240; line-height:1.7;">
                        Jl. Fashion No. 123 <br>
                        Jawa Timur, Indonesia
                    </p>
                </div>

                <div>
                    <p style="font-size:14px; color:#b28b28; font-weight:700; margin-bottom:5px;">
                        📞 TELEPON
                    </p>

                    <p style="color:#5c5240;">
                        +62 812-3456-7890
                    </p>
                </div>

                <div>
                    <p style="font-size:14px; color:#b28b28; font-weight:700; margin-bottom:5px;">
                        📧 EMAIL
                    </p>

                    <p style="color:#5c5240;">
                        info@moodfitfashion.com
                    </p>
                </div>

                <div>
                    <p style="font-size:14px; color:#b28b28; font-weight:700; margin-bottom:5px;">
                        ⏰ JAM OPERASIONAL
                    </p>

                    <p style="color:#5c5240; line-height:1.7;">
                        Senin – Sabtu : 09.00 – 17.00 WIB <br>
                        Minggu : Tutup
                    </p>
                </div>

            </div>

        </div>

        <!-- SOSIAL MEDIA -->
        <div style="
            background: linear-gradient(135deg, #fff4cc, #fff9ea);
            border-radius:28px;
            padding:35px;
            border:1px solid #f6dfa6;
            box-shadow:0 10px 30px rgba(212, 180, 90, 0.12);
        ">

            <h2 style="
                font-size:24px;
                font-weight:700;
                color:#7a5c00;
                margin-bottom:25px;
            ">
                Media Sosial
            </h2>

            <div style="
                display:flex;
                flex-direction:column;
                gap:18px;
            ">

                <div style="
                    background:white;
                    padding:18px 22px;
                    border-radius:18px;
                    display:flex;
                    align-items:center;
                    gap:15px;
                    box-shadow:0 4px 15px rgba(0,0,0,0.05);
                ">
                    <span style="font-size:22px;">📷</span>

                    <div>
                        <p style="font-weight:700; color:#7a5c00;">
                            Instagram
                        </p>

                        <p style="font-size:14px; color:#777;">
                            @moodfitfashion
                        </p>
                    </div>
                </div>

                <div style="
                    background:white;
                    padding:18px 22px;
                    border-radius:18px;
                    display:flex;
                    align-items:center;
                    gap:15px;
                    box-shadow:0 4px 15px rgba(0,0,0,0.05);
                ">
                    <span style="font-size:22px;">📘</span>

                    <div>
                        <p style="font-weight:700; color:#7a5c00;">
                            Facebook
                        </p>

                        <p style="font-size:14px; color:#777;">
                            MoodFit Fashion Official
                        </p>
                    </div>
                </div>

                <div style="
                    background:white;
                    padding:18px 22px;
                    border-radius:18px;
                    display:flex;
                    align-items:center;
                    gap:15px;
                    box-shadow:0 4px 15px rgba(0,0,0,0.05);
                ">
                    <span style="font-size:22px;">🎵</span>

                    <div>
                        <p style="font-weight:700; color:#7a5c00;">
                            TikTok
                        </p>

                        <p style="font-size:14px; color:#777;">
                            @moodfitfashion
                        </p>
                    </div>
                </div>

            </div>

            <!-- QUOTE -->
            <div style="
                margin-top:35px;
                background:rgba(255,255,255,0.7);
                border-left:5px solid #e0b94f;
                padding:20px;
                border-radius:18px;
            ">

                <p style="
                    color:#7a5c00;
                    line-height:1.8;
                    font-style:italic;
                ">
                    “Fashion bukan hanya tentang pakaian, tetapi tentang bagaimana Anda mengekspresikan diri.”
                </p>

            </div>

        </div>

    </div>

</div>

@endsection