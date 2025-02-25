import './bootstrap';


let object = window.details;

document.addEventListener('DOMContentLoaded', function () {
    if (object && object.data) {
        object.data.forEach(item => {
            if (item.is_completed) {
                let card = document.getElementById(`card-${item.id}`);
                if (card) {
                    card.style.textDecoration = 'line-through';
                    card.style.textDecorationColor = 'black';
                    card.style.pointerEvents = 'none';
                    let button = card.querySelector('button');
                    if (button) {
                        button.style.textDecoration = 'line-through';
                        button.style.textDecorationColor = 'black';
                        button.style.pointerEvents = 'auto';
                    }
                } 
            }
        });
    }
});