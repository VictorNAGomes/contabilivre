function update(game) {
    let json = JSON.parse(game)
    console.log(json[0])

    let inputTitle = document.getElementById('input-title')
    inputTitle.value = json[0].title
}