<x-index :title="$title" class="cliente">
    <x-common.header :menus="$menus"></x-common.header>
    <section class="grid-container"> 
        <div class="presentacion">
            <a href="{{route('spa')}}">
                <img src="{{ asset('img/spa3.jpg') }}"  alt="..." >
            <label class="presentacionBtn">SPA</label>
            </a>
        </div>
        <div class="presentacion">
            <a href="{{route('salon')}}">
            <img src="{{ asset('img/sdb3.jpg') }}"  alt="..." >
            <label>SALON DE BELLEZA</label> 
        </div>
        <div class="presentacion">
            <a href="{{route('barberia')}}">
            <img src="{{ asset('img/bb3.jpg') }}"  alt="..." >
            <label>BARBERIAS</label> 
        </div>
    </section> 
    <section>
        <h1>!SELECIONA TU SERVICIO¡</h1> 
    </section>       
</x-index>