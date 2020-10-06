<div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Post Thumb -->
                                    <h1>{{ $data[0]->judul}}</h1><br>
                                    <div class="blog-post-thumb">
                                        <img src="{{ asset('user/img/blog-img/kongres.jpeg') }}" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="#">Dikti, </a><a href="#">6 November 2019</a></h6>
                                    </div>
                                    <!-- Post Title -->
                                    <h2 id="judul-sejarah"></h2>
                                    <!-- Post Excerpt -->
                                    <p>{!! $data[0]->deskripsi !!}</p>
                                    <!-- Read More btn -->
                                    <!-- <a href="#">Read More</a> -->
                                </div>