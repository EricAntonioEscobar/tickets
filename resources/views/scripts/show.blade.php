<script>
    const DatosPersonales = () => {
        document.getElementById("perfil_id").style.display="block";
        document.getElementById("table_equipos").style.display="none";
        document.getElementById("form_solicitar").style.display="none";
    }

    const EquiposAsignados = () => {
        document.getElementById("perfil_id").style.display="none";
        document.getElementById("table_equipos").style.display="block";
        document.getElementById("table_equipos").style.display="transform:translate(1000px,250px)";;
        document.getElementById("form_solicitar").style.display="none";
    }

    const SolicitarEquipo = () => {
        document.getElementById("perfil_id").style.display="none";
        document.getElementById("table_equipos").style.display="none";
        document.getElementById("form_solicitar").style.display="block"
    }

    const Inventario = () => {
        document.getElementById("table_inventario").style.display="block"
        document.getElementById("container-btns").style.display="block"
        document.getElementById("table_celulares").style.display="none"
        document.getElementById("table_compus").style.display="none"
        document.getElementById("table_otros").style.display="none"
        document.getElementById("form_cargar").style.display="none"
        
    }

    const Celulares = () => {
        document.getElementById("table_inventario").style.display="none"
        document.getElementById("container-btns").style.display="block"
        document.getElementById("table_celulares").style.display="block"
        document.getElementById("table_compus").style.display="none"
        document.getElementById("table_otros").style.display="none"
    }

    const Computadoras = () => {
        document.getElementById("table_inventario").style.display="none"
        document.getElementById("container-btns").style.display="block"
        document.getElementById("table_celulares").style.display="none"
        document.getElementById("table_compus").style.display="block"
        document.getElementById("table_otros").style.display="none"
    }

    const Otros = () => {
        document.getElementById("table_inventario").style.display="none"
        document.getElementById("container-btns").style.display="block"
        document.getElementById("table_celulares").style.display="none"
        document.getElementById("table_compus").style.display="none"
        document.getElementById("table_otros").style.display="block"
    }

    const CargarEquipo = () => {
        document.getElementById("table_inventario").style.display="none"
        document.getElementById("container-btns").style.display="none"
        document.getElementById("table_celulares").style.display="none"
        document.getElementById("table_compus").style.display="none"
        document.getElementById("table_otros").style.display="none"
        document.getElementById("form_cargar").style.display="block"
    }

    const RegistrarUsuarioCargarEquipo = () => {
        document.getElementById("form_registrar_usuario").style.display="block"
    }

    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);

    const Prestamos = () => {
        document.getElementById("table_prestamos").style.display="block"
        document.getElementById("table_usuarios").style.display="none"
    }

    const Usuarios = () => {
        document.getElementById("table_prestamos").style.display="none"
        document.getElementById("table_usuarios").style.display="block"
    }

</script>