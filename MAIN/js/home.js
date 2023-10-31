// CODIGO HOME

function showPage(id) {

    const subpag = document.querySelectorAll('.subpagina');
    subpag.forEach(sp => {
        sp.classList.remove('pagina');
    });

    const selectSubpag = document.getElementById(id);
    selectSubpag.classList.add('pagina');

}

function some(id) {
    
    const pagagr = document.getElementById(id);
    pagagr.classList.add('subpagina')

}



// CODIGO AVISO



    // AVISOS
    function revelAviso1() {

        var av1 = document.getElementById('aviso1')
        
        if (av1.style.display === 'none') {
            av1.style.display = 'block'; // Mostra o conteúdo ao clicar

        } else {
            av1.style.display = 'none'; // Oculta o conteúdo se já estiver visível
        }

    }

    function revelAviso2(){

        var av2 = document.getElementById('aviso2')
        
        if (av2.style.display === 'none') {
            av2.style.display = 'block'; // Mostra o conteúdo ao clicar

        } else {
            av2.style.display = 'none'; // Oculta o conteúdo se já estiver visível
        }

    }

    function revelAviso3() {

        var av3 = document.getElementById('aviso3')
        
        if (av3.style.display === 'none') {
            av3.style.display = 'block'; // Mostra o conteúdo ao clicar
            
        } else {
            av3.style.display = 'none'; // Oculta o conteúdo se já estiver visível
        }

    }