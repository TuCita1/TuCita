<x-index :title="$title" class="cliente">
    <x-common.header :menus="$menus"></x-common.header>
    
    <table class="info"> 
    <tr>
        <td class="presentacion">
            <img src="{{ asset('img/spa3.jpg') }}"  alt="..." >
            <label class="presentacionBtn">MASAJES</label> 
        </td>

        <td class="presentacion">
            <img src="{{ asset('img/spa3.jpg') }}"  alt="..." >
            <label class="presentacionBtn">TRATAMIENTOS FACIALES</label> 
        </td> 
        
        <td class="presentacion">
            <img src="{{ asset('img/spa3.jpg') }}"  alt="..." >
            <label class="presentacionBtn">TRATAMIENTOS CORPORALES</label> 
        </td> 
    </tr> 
    
    <tr>
        <td class="presentacion">
            <img src="{{ asset('img/spa3.jpg') }}"  alt="..." >
            <label class="presentacionBtn">DEPILACION</label> 
        </td>

        <td class="presentacion">
            <img src="{{ asset('img/spa3.jpg') }}"  alt="..." >
            <label class="presentacionBtn">CEJAS Y PESTAÑAS</label> 
        </td> 
        
        <td class="presentacion">
            <img src="{{ asset('img/spa3.jpg') }}"  alt="..." >
            <label class="presentacionBtn">TRATAMIENTOS PARA MANOS Y PIES</label> 
        </td> 
    </tr>    
        
</table> 

</x-index>