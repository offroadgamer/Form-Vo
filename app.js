let answers = [[], [], []]
console.log(answers)

function submit() {
    answers[0].push(document.getElementById("fornavn").value)
    answers[1].push(document.getElementById("etternavn").value)
    answers[2].push(document.getElementById("epost").value)
    console.log(answers)
}

function reset() {
    document.getElementById("fornavn").value = ""
    document.getElementById("etternavn").value = ""
    document.getElementById("epost").value = ""
}
