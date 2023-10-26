
const tabela = document.getElementById('tabela');
const numeroDeLinhas = 7;
const numeroDeColunas = 3;

const cursos = {
    Direito: ["Direito Civil", "Direito Criminal", "Ética", "Direito do Trabalho", "Direito Constitucional", "Direito Administrativo"],
    Medicina: ["Anatomia", "Bioquímica", "Fisiologia", "Pediatria", "Cirurgia", "Cardiologia"],
    Engenharia: ["Cálculo", "Física", "Química", "Mecânica", "Eletricidade", "Termodinâmica"]
    };

function gerarValorAleatorio(min, max) {
return Math.floor(Math.random() * (max - min + 1) + min);
}

function criarCabecalho() {
const tr = document.createElement('tr');
const materiasTd = document.createElement('td');
materiasTd.textContent = "Matérias";
tr.appendChild(materiasTd);

const notasTd = document.createElement('td');
notasTd.textContent = "Notas";
tr.appendChild(notasTd);

const frequenciaTd = document.createElement('td');
frequenciaTd.textContent = "Frequência";
tr.appendChild(frequenciaTd);

tabela.appendChild(tr);
}

function criarLinha(materia, nota, frequencia) {
    const tr = document.createElement('tr');

    const materiaTd = document.createElement('td');
    materiaTd.textContent = materia;
    tr.appendChild(materiaTd);

    const notaTd = document.createElement('td');
    notaTd.textContent = nota;
    tr.appendChild(notaTd);

    const frequenciaTd = document.createElement('td');
    frequenciaTd.textContent = frequencia;
    tr.appendChild(frequenciaTd);

    tabela.appendChild(tr);
}

function preencherTabela() {
    const nomesDosCursos = Object.keys(cursos);
    const cursoEscolhido = cursos[nomesDosCursos[gerarValorAleatorio(0, nomesDosCursos.length - 1)]];

    criarCabecalho();

    for (let i = 0; i < 6; i++) {
        const notaAleatoria = gerarValorAleatorio(6, 10).toFixed(1);
        const frequenciaAleatoria = gerarValorAleatorio(70, 100); 
        criarLinha(cursoEscolhido[i], notaAleatoria, frequenciaAleatoria);
    }
    }

/*preencherTabela();*/

document.addEventListener('DOMContentLoaded', function() {
    preencherTabela();
  });

