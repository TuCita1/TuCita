<x-index :title="$title" class="cliente">
    <x-common.header :menus="$menus"></x-common.header>
    <table class="grid-container">
    <tr>
        <td class="presentacion">
        <img src="{{ asset('img/bb3.jpg') }}"  alt="..." >
        <label>CORTE DE CABELLO PARA CABALLERO </label> 
        </td>

        <td class="presentacion">
        <img src="{{ asset('img/bb3.jpg') }}"  alt="..." >
        <label>TRATAMIENTO CAPILAR</label> 
        </td>

        <td class="presentacion">
        <img src="{{ asset('img/bb3.jpg') }}"  alt="..." >
        <label>BELLEZA MASCULINA</label> 
        </td>
    </tr>
    
    <tr>
        <td class="presentacion">
        <img src="{{ asset('img/bb3.jpg') }}"  alt="..." >
        <label>AFEITADO</label> 
        </td>

        <td class="presentacion">
        <img src="{{ asset('img/bb3.jpg') }}"  alt="..." >
        <label>TINTURAS</label> 
        </td>

        <td class="presentacion">
        <img src="{{ asset('img/bb3.jpg') }}"  alt="..." >
        <label>BARBERIAS</label> 
        </td>
    </tr>        
    
</table>

</x-index>