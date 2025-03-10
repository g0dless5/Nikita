// Простой скрипт для плавных переходов и задержки при переходе между страницами
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a');
    
    // Плавный переход по ссылкам
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetUrl = link.getAttribute('href');
            
            // Добавляем плавное исчезновение страницы
            document.body.style.opacity = '0';
            setTimeout(function() {
                window.location.href = targetUrl;
            }, 500);  // Задержка перед переходом для эффекта исчезновения
        });
    });
});
