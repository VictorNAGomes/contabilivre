function update(game, category) {
    let json = JSON.parse(game)
    let jsonCategory = JSON.parse(category)
    console.log(json[0])
    console.log(jsonCategory)

    let inputTitle = document.getElementById('input-title')
    let inputDesc = document.getElementById('input-desc')
    let inputPrice = document.getElementById('input-price')
    let inputPlatform = document.getElementById('input-platform')
    let inputReleaseDate = document.getElementById('input-releaseDate')
    let playedY = document.getElementById('yes')
    let playedN = document.getElementById('no')

    inputTitle.value = json[0].title
    inputDesc.value = json[0].description
    inputPrice.value = json[0].price
    inputPlatform.value = json[0].platform
    inputReleaseDate.value = json[0].releaseDate

    if (json[0].played == 1) {
        playedY.setAttribute('checked', true)
    } else {
        playedN.setAttribute('checked', true)
    }
    jsonCategory.forEach(category => {
        for (const [key, value] of Object.entries(category)) {
            if (key == "category") {
                let categoryInput = document.querySelector(`input[value=${value}]`)
                categoryInput.setAttribute('checked', true)
            }
        }
    });
}