<script>
    const Celulares = () => {
        document.getElementById("table_inventario").style.display="none"
        document.getElementById("container-btns").style.display="block"
        document.getElementById("table_celulares").style.display="block"
        document.getElementById("table_celulares").classList.add("animate");
        document.getElementById("table_compus").style.display="none"
        document.getElementById("table_otros").style.display="none"
    }

    const Computadoras = () => {
        document.getElementById("table_inventario").style.display="none"
        document.getElementById("container-btns").style.display="block"
        document.getElementById("table_celulares").style.display="none"
        document.getElementById("table_compus").style.display="block"
        document.getElementById("table_compus").classList.add("animate");
        document.getElementById("table_otros").style.display="none"
    }

    const Otros = () => {
        document.getElementById("table_inventario").style.display="none"
        document.getElementById("container-btns").style.display="block"
        document.getElementById("table_celulares").style.display="none"
        document.getElementById("table_compus").style.display="none"
        document.getElementById("table_otros").style.display="block"
        document.getElementById("table_otros").classList.add("animate");
    }

    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);

</script>