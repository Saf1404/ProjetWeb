document.querySelectorAll('.signup-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        var index = this.getAttribute('data-index');
        var pseudo = this.getAttribute('data-pseudo');


        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'inscrire_evenement.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var countElement = button.parentNode.parentNode.querySelector('.event-stats span:last-child');
                var count = parseInt(countElement.textContent.split(':')[1].trim());

                if (button.textContent.includes('INSCRIT')) {
                    button.innerHTML = '👤 S\'INSCRIRE';
                    count--;

                    var interestBtn = button.parentNode.querySelector('.interest-btn');
                    interestBtn.disabled = false;
                } else {
                    button.innerHTML = '✅ INSCRIT';
                    count++;

                    var interestBtn = button.parentNode.querySelector('.interest-btn');
                    interestBtn.disabled = true;

                    if (interestBtn.textContent.includes('Intéressé')) {
                        interestBtn.innerHTML = '🩶 S\'intéresser';
                        var countElement = button.parentNode.parentNode.querySelector('.event-stats span:first-child');
                        var count = parseInt(countElement.textContent.split(':')[1].trim());
                        countElement.textContent = '❤️: ' + (count - 1);
                    }
                }

                countElement.textContent = '👥: ' + count;
            }
        };
        xhr.send('index=' + index + '&pseudo=' + pseudo);
    });
});

document.querySelectorAll('.interest-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        var index = this.getAttribute('data-index');
        var pseudo = this.getAttribute('data-pseudo');

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'interesser_evenement.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                if (button.textContent.includes('Intéressé')) {
                    button.innerHTML = '🩶 S\'intéresser';
                } else {
                    button.innerHTML = '❤️ Intéressé';
                }
            }
        };
        xhr.send('index=' + index + '&pseudo=' + pseudo);
    });
});