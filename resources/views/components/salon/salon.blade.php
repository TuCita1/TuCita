<x-index :title="$title" class="cliente">
    <x-common.header :menus="$menus"></x-common.header>
    <table class="grid-container"> 
    <tr>
        <td class="presentacion">
            <img src="{{ asset('img/sdb3.jpg') }}"  alt="..." >
            <label>CEPILLADO</label> 
        </td>

        <td class="presentacion">
            <img src="{{ asset('img/sdb3.jpg') }}"  alt="..." >
            <label>KERATINA</label> 
        </td> 

        <td class="presentacion">
            <img src="{{ asset('img/sdb3.jpg') }}"  alt="..." >
            <label>CORTE PARA DAMA</label> 
        </td>
    </tr>    
    
    <tr>
        <td class="presentacion">
            <img src="{{ asset('img/sdb3.jpg') }}"  alt="..." >
            <label>TINTURAS</label> 
        </td>

        <td class="presentacion">
            <img src="{{ asset('img/sdb3.jpg') }}"  alt="..." >
            <label>MANICURE</label> 
        </td> 
        
        <td class="presentacion">
            <img src="{{ asset('img/sdb3.jpg') }}"  alt="..." >
            <label>PEDICURE</label> 
        </td>
    </tr>
</table> 
</x-index>