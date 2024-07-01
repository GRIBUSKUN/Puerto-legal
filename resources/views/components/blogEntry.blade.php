<!-- news section end -->
<div class="blog_entry col-md-12">
    <div class="container">
        <div class="row blog_entry_data">
            <p>{{ $fecha }}</p>
            <p>Escrito por {{ $escritor }}</p>
        </div>
        <div class="row blog_entry_title">
            <div class="col-md-12">
                <h2>{{ $titulo_entry }}</h2>
                <img src="images/news-img.png">
            </div>
        </div>
        <div class="row blog_entry_content">
            <div class="col-md-12">
                <h3>{{ $content }}</h3>
            </div>
        </div>
        <div class="row bog_entry_button col-md-12">
            <div class="read_bt">
                <a href="{{ $link }}">
                    leer mas
                </a>
            </div>
        </div>
    </div>
</div>
