

let container = document.querySelector('#skills');
//javascript Promise

let Promise = fetch('data/skills.json');
Promise
    .then(response => response.json())
    .then(skills => {
        console.log(skills);
        for (let i = 0; i < skills.length; i++) {
            let skill = skills[i];
            //template Letral
            container.innerHTML += `<div>
        <h4>${skill.name}</h4>
        <div class="progress">
        <div Style= "width:${skill.percent}%"></div>
        </div>`;
        }
    })
    .catch(function () {
        alert('Cannot get skills!');
    });


    