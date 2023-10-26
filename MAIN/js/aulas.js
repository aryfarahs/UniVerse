function preencherTabelaAulas() {
    const tabela = document.getElementById('tabela-aulas');
    if (!tabela) return;
  
    const materiasEscolhidas = JSON.parse(localStorage.getItem('materiasEscolhidas')) || [];
  
    const cabecalho = tabela.createTHead().insertRow();
    cabecalho.insertCell().textContent = 'Matérias';
    cabecalho.insertCell().textContent = 'Carga Horária';
  
    const corpoTabela = tabela.createTBody();
    for (const materia of materiasEscolhidas) {
      const linha = corpoTabela.insertRow();
      linha.insertCell().textContent = materia;
      linha.insertCell().textContent = Math.random() > 0.5 ? '120 horas' : '80 horas';
    }
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    preencherTabelaAulas();
  });
  