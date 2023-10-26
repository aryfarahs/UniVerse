let materiasEscolhidas = [];

function selecionarMaterias() {
  const cursos = {
    direito: ['Direito Civil', 'Direito Criminal', 'Ética', 'Direito Constitucional', 'Direito Administrativo', 'Direito do Trabalho'],
    medicina: ['Anatomia', 'Fisiologia', 'Bioquímica', 'Patologia', 'Farmacologia', 'Clínica Médica'],
    engenharia: ['Cálculo', 'Física', 'Química', 'Algoritmos', 'Estruturas de Dados', 'Engenharia de Software']
  };

  const cursoEscolhido = Object.keys(cursos)[Math.floor(Math.random() * 3)];
  materiasEscolhidas = cursos[cursoEscolhido];

  localStorage.setItem('materiasEscolhidas', JSON.stringify(materiasEscolhidas));
}

document.addEventListener('DOMContentLoaded', function() {
  selecionarMaterias();
});

function preencherTabelaNotas() {
    const tabela = document.getElementById('tabela-notas');
    if (!tabela) return;
  
    const materiasEscolhidas = JSON.parse(localStorage.getItem('materiasEscolhidas')) || [];
  
    const cabecalho = tabela.createTHead().insertRow();
    cabecalho.insertCell().textContent = 'Matérias';
    cabecalho.insertCell().textContent = 'Notas';
    cabecalho.insertCell().textContent = 'Frequência';
  
    const corpoTabela = tabela.createTBody();
    for (let i = 0; i < 6; i++) {
      const linha = corpoTabela.insertRow();
      linha.insertCell().textContent = materiasEscolhidas[i];
      linha.insertCell().textContent = (Math.random() * 4 + 6).toFixed(2);
      linha.insertCell().textContent = Math.floor(Math.random() * 31 + 70) + '%';
    }
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    preencherTabelaNotas();
  });
  

// const tabela = document.getElementById('tabela');
// const numeroDeLinhas = 7;
// const numeroDeColunas = 3;

// const cursos = {
//     Direito: ["Direito Civil", "Direito Criminal", "Ética", "Direito do Trabalho", "Direito Constitucional", "Direito Administrativo"],
//     Medicina: ["Anatomia", "Bioquímica", "Fisiologia", "Pediatria", "Cirurgia", "Cardiologia"],
//     Engenharia: ["Cálculo", "Física", "Química", "Mecânica", "Eletricidade", "Termodinâmica"]
//     };

// function gerarValorAleatorio(min, max) {
// return Math.floor(Math.random() * (max - min + 1) + min);
// }

// function criarCabecalho() {
// const tr = document.createElement('tr');
// const materiasTd = document.createElement('td');
// materiasTd.textContent = "Matérias";
// tr.appendChild(materiasTd);

// const notasTd = document.createElement('td');
// notasTd.textContent = "Notas";
// tr.appendChild(notasTd);

// const frequenciaTd = document.createElement('td');
// frequenciaTd.textContent = "Frequência";
// tr.appendChild(frequenciaTd);

// tabela.appendChild(tr);
// }

// function criarLinha(materia, nota, frequencia) {
//     const tr = document.createElement('tr');

//     const materiaTd = document.createElement('td');
//     materiaTd.textContent = materia;
//     tr.appendChild(materiaTd);

//     const notaTd = document.createElement('td');
//     notaTd.textContent = nota;
//     tr.appendChild(notaTd);

//     const frequenciaTd = document.createElement('td');
//     frequenciaTd.textContent = frequencia;
//     tr.appendChild(frequenciaTd);

//     tabela.appendChild(tr);
// }

// function preencherTabela() {
//     const nomesDosCursos = Object.keys(cursos);
//     const cursoEscolhido = cursos[nomesDosCursos[gerarValorAleatorio(0, nomesDosCursos.length - 1)]];

//     criarCabecalho();

//     for (let i = 0; i < 6; i++) {
//         const notaAleatoria = gerarValorAleatorio(6, 10).toFixed(1);
//         const frequenciaAleatoria = gerarValorAleatorio(70, 100); 
//         criarLinha(cursoEscolhido[i], notaAleatoria, frequenciaAleatoria);
//     }
//     }


// document.addEventListener('DOMContentLoaded', function() {
//   preencherTabela();
// });
