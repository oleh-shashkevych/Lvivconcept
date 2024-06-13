document.addEventListener('DOMContentLoaded', function () {
    window.addEventListener('scroll', function () {
        var header = document.querySelector('.header');
        header.classList.toggle('scroll', window.scrollY > 0);
    });

    window.addEventListener('scroll', function () {
        var button = document.querySelector('.header__button');
        var windowHeight = window.innerHeight;

        if (window.scrollY > windowHeight) {
            button.style.opacity = '1';
        } else {
            button.style.opacity = '0';
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var video = document.querySelector('.hero__video-mobile');

    if (navigator.getAutoplayPolicy && typeof navigator.getAutoplayPolicy === 'function') {
        if (navigator.getAutoplayPolicy(video) === "allowed") {
            // The video element will autoplay with audio.
            video.play();
        } else if (navigator.getAutoplayPolicy(video) === "allowed-muted") {
            // Mute audio on video
            video.muted = true;
            video.play();
        } else if (navigator.getAutoplayPolicy(video) === "disallowed") {
            // Set a default placeholder image.
            video.poster = "http://example.com/poster_image_url";
        }
    } else {
        // If getAutoplayPolicy is not supported, try to play the video anyway
        video.play();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    var burger = document.querySelector('.burger-menu');
    var closeButton = document.querySelector('.header__menu-close');
    var nav = document.querySelector('.header__menu');
    var html = document.querySelector('html');
    var links = document.querySelectorAll('.header__menu a'); // Получаем все ссылки в меню

    // Функция для закрытия меню
    function closeMenu() {
        nav.classList.remove('active');
        html.style.overflow = ''; // Восстанавливаем прокрутку
    }

    burger.addEventListener('click', function () {
        if (window.innerWidth < 768) { // Проверяем ширину экрана
            burger.classList.toggle('toggle');
            nav.classList.toggle('active');
            html.style.overflow = html.style.overflow === 'hidden' ? '' : 'hidden'; // Переключаем состояние прокрутки
        }
    });

    closeButton.addEventListener('click', closeMenu);

    // Добавляем обработчики событий для всех ссылок
    links.forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const cursor = document.getElementById("cursor");
    const stalker = document.getElementById("stalker");
    document.addEventListener("mousemove", (event) => {
        const x = event.clientX;
        const y = event.clientY;
        cursor.style.transform = `translate(${x}px, ${y}px)`;
        stalker.style.transform = `translate(${x}px, ${y}px)`;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Находим элементы, которые нужно анимировать
    let elements = document.querySelectorAll('.animation');

    // Функция для добавления анимации
    function addAnimation(entries, observer) {
        entries.forEach(entry => {
            // Если элемент виден
            if (entry.isIntersecting) {
                // Добавляем класс для анимации
                entry.target.classList.add('animate');
            }
        });
    }

    // Создаем новый экземпляр Intersection Observer
    let observer = new IntersectionObserver(addAnimation);

    // Наблюдаем за каждым элементом
    elements.forEach(element => {
        observer.observe(element);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const swiperjs = new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: '.pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.values__arrow',
        },
    });
});

window.onload = function () {
    var items = document.querySelectorAll('.values__text');
    var maxHeight = 0;

    function updateHeight() {
        maxHeight = 0;
        items.forEach(function (item) {
            item.style.height = ''; // сбрасываем высоту
            var height = item.offsetHeight;
            if (height > maxHeight) {
                maxHeight = height;
            }
        });

        items.forEach(function (item) {
            item.style.height = maxHeight + 'px';
        });
    }

    updateHeight();

    window.addEventListener('resize', updateHeight);
};

document.addEventListener('DOMContentLoaded', function () {
    // Получаем все ссылки
    var links = document.querySelectorAll('.projects__item');

    // Добавляем обработчик события на каждую ссылку
    links.forEach(function (link) {
        link.addEventListener('click', function (event) {
            // Получаем значение data-active-tab
            var activeTab = this.getAttribute('data-active-tab');

            // Сохраняем значение data-active-tab в куки
            document.cookie = 'activeTab=' + activeTab + '; path=/';

            // Если вы не хотите, чтобы страница перезагружалась сразу,
            // вы можете предотвратить действие по умолчанию (переход по ссылке)
            // event.preventDefault();
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Получаем все кнопки
    var tabs = document.querySelectorAll('.rooms__tab');

    if (tabs.length > 0) {
        // Добавляем обработчик события на каждую кнопку
        tabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                var tabId = this.id;
                var items = document.querySelectorAll('.rooms__item');

                // Удаляем класс active со всех кнопок
                tabs.forEach(function (tab) {
                    tab.classList.remove('active');
                });

                // Добавляем класс active на нажатую кнопку
                this.classList.add('active');

                // Если нажата кнопка "Всі", показываем все блоки
                if (tabId === 'roomsTabs-all') {
                    items.forEach(function (item) {
                        item.style.display = 'block';
                    });
                } else {
                    // Иначе показываем только те блоки, у которых совпадает data-tab-id
                    items.forEach(function (item) {
                        if (item.getAttribute('data-tab-id') === tabId) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                }
            });
        });

        // Получаем сохраненное значение куки
        var savedTabId = document.cookie.replace(/(?:(?:^|.*;\s*)activeTab\s*\=\s*([^;]*).*$)|^.*$/, "$1");

        // Если значение куки существует, "нажимаем" соответствующую вкладку
        if (savedTabId) {
            var savedTab = document.querySelector('#roomsTabs-' + savedTabId);
            if (savedTab) {
                savedTab.click();
            }
        }

        // Сбрасываем куки
        document.cookie = 'activeTab=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }
});

function createGallery(galleryId) {
    var galleryImages = document.querySelectorAll('#' + galleryId + ' .single__gallery-item img');

    if (!galleryImages.length) return;

    var imagesArray = Array.prototype.slice.call(galleryImages);

    var popup = document.createElement('div');
    popup.classList.add('popup');
    document.body.appendChild(popup);

    var img = document.createElement('img');
    popup.appendChild(img);

    var leftArrow = document.createElement('div');
    leftArrow.classList.add('arrow', 'left');
    popup.appendChild(leftArrow);

    var rightArrow = document.createElement('div');
    rightArrow.classList.add('arrow', 'right');
    popup.appendChild(rightArrow);

    var counter = document.createElement('div');
    counter.classList.add('counter');
    popup.appendChild(counter);

    var currentImageNumber = document.createElement('span');
    currentImageNumber.classList.add('current');
    counter.appendChild(currentImageNumber);

    counter.appendChild(document.createTextNode(' / '));

    var totalImagesNumber = document.createElement('span');
    totalImagesNumber.classList.add('total');
    counter.appendChild(totalImagesNumber);

    if (imagesArray.length === 1) {
        leftArrow.style.display = 'none';
        rightArrow.style.display = 'none';
        counter.style.display = 'none';
    }

    imagesArray.forEach(function (image, index) {
        image.addEventListener('click', function () {
            popup.style.display = 'flex';
            img.src = this.dataset.src;
            img.currentImage = index;
            currentImageNumber.textContent = (img.currentImage + 1).toString().padStart(2, '0');
            totalImagesNumber.textContent = imagesArray.length.toString().padStart(2, '0');
            document.querySelector('html').style.overflow = 'hidden';
        });
    });

    popup.addEventListener('click', function (event) {
        if (event.target !== leftArrow && event.target !== rightArrow && event.target !== img) {
            popup.style.display = 'none';
            document.querySelector('html').style.overflow = '';
        }
    });

    var isAnimating = false;

    var handleArrowClick = function (direction) {
        if (imagesArray.length > 1 && !isAnimating) {
            isAnimating = true;
            img.currentImage = (img.currentImage + direction + imagesArray.length) % imagesArray.length;
            img.src = imagesArray[img.currentImage].dataset.src;
            currentImageNumber.textContent = (img.currentImage + 1).toString().padStart(2, '0');
            setTimeout(function () { isAnimating = false; }, 100);
        }
    };

    leftArrow.addEventListener('click', function (event) {
        event.stopPropagation();
        handleArrowClick(-1);
    });

    rightArrow.addEventListener('click', function (event) {
        event.stopPropagation();
        handleArrowClick(1);
    });

    var startX = 0;
    var endX = 0;

    popup.addEventListener('touchstart', function (event) {
        startX = event.touches[0].clientX;
    });

    popup.addEventListener('touchmove', function (event) {
        endX = event.touches[0].clientX;
    });

    popup.addEventListener('touchend', function () {
        var diffX = endX - startX;
        if (Math.abs(diffX) > 30 && imagesArray.length > 1) {
            if (diffX > 0) {
                handleArrowClick(-1);
            } else {
                handleArrowClick(1);
            }
        }
    });

    img.addEventListener('click', function (event) {
        event.stopPropagation(); // Останавливаем всплытие события, чтобы клик по изображению не закрывал попап и не переключал изображение
    });

    window.addEventListener('keydown', function (event) {
        if (popup.style.display === 'flex') {
            switch (event.key) {
                case 'ArrowLeft':
                    handleArrowClick(-1);
                    break;
                case 'ArrowRight':
                    handleArrowClick(1);
                    break;
            }
        }
    });    
}

// Вызываем функцию для каждой галереи на странице
document.addEventListener('DOMContentLoaded', function () {
    createGallery('galleryPhotos');
    createGallery('galleryPlans');
});

document.addEventListener('DOMContentLoaded', function () {
    var openIframePopupButton = document.getElementById('openIframePopup');
    var closeIframePopupButton = document.getElementById('closeIframePopup');
    var iframePopup = document.getElementById('iframePopup');
    var iframeContainer = document.getElementById('iframeContainer');

    openIframePopupButton.addEventListener('click', function () {
        iframePopup.style.display = 'flex';
        document.querySelector('html').style.overflow = 'hidden';
    });

    closeIframePopupButton.addEventListener('click', function () {
        iframePopup.style.display = 'none';
        document.querySelector('html').style.overflow = '';
    });

    // Закрываем попап при клике вне iframe
    iframePopup.addEventListener('click', function (event) {
        if (event.target === iframePopup) {
            iframePopup.style.display = 'none';
            document.querySelector('html').style.overflow = '';
        }
    });

    // Останавливаем всплытие события, чтобы попап не закрывался при клике на iframe
    iframeContainer.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth < 768) {
        var lastClicked = null;
        var items = document.querySelectorAll('.projects__item');
        items.forEach(function (item) {
            item.addEventListener('click', function (e) {
                if (lastClicked == this) {
                    lastClicked = null;
                } else {
                    e.preventDefault();
                    lastClicked = this;
                }
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    function animateValue(obj, start, end, duration) {
        obj.innerHTML = start; // сбрасываем значение перед началом анимации
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            let current = Math.floor(progress * (end - start) + start);
            // Если число больше 1000, добавляем разделители
            if (current > 1000) {
                current = current.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            }
            obj.innerHTML = current;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    var countings = document.querySelectorAll('.counting');

    // Создаем observer
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Если элемент в поле видимости
            if (entry.isIntersecting) {
                // Получаем значение из элемента с классом 'counting'
                const value = entry.target.innerText.replace(/\s/g, ''); // удаляем пробелы
                // Запускаем анимацию
                animateValue(entry.target, 0, parseInt(value), 2000); // 2000 - это время анимации в миллисекундах
                // Отключаем observer для этого элемента
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 }); // Начинаем наблюдение, когда 10% элемента видны

    // Проходим по каждому элементу
    countings.forEach((counting) => {
        // Начинаем наблюдение
        observer.observe(counting);
    });

    if (window.innerWidth < 768) {
        var items = document.querySelectorAll('.statistics__item');
        var index = 0;

        function changeItem() {
            items.forEach(function (item, i) {
                if (i === index) {
                    item.classList.add('active');
                    // Запускаем анимацию для активного элемента
                    var counting = item.querySelector('.counting');
                    if (counting) {
                        var value = counting.textContent.replace(/\s/g, ''); // удаляем пробелы
                        var duration = parseInt(value) > 1000 ? 8000 : 6000; // увеличиваем продолжительность для больших чисел
                        animateValue(counting, 0, parseInt(value), duration);
                    }
                } else {
                    item.classList.remove('active');
                }
            });

            index = (index + 1) % items.length;
        }

        changeItem();
        setInterval(changeItem, 10000);
    }
});

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-popup="true"]').forEach((button) => {
        button.addEventListener('click', function () {
            const popupId = button.getAttribute('data-popup-id');
            const popup = document.getElementById(popupId);
            popup.style.display = 'flex';
            document.querySelector('html').style.overflow = 'hidden';

            // Закрываем попап при клике вне содержимого попапа
            popup.addEventListener('click', function (event) {
                if (event.target === popup) {
                    popup.style.display = 'none';
                    document.querySelector('html').style.overflow = '';
                }
            });

            // Останавливаем всплытие события, чтобы попап не закрывался при клике на содержимое попапа
            const popupContent = popup.querySelector('.popup__form');
            if (popupContent) {
                popupContent.addEventListener('click', function (event) {
                    event.stopPropagation();
                });
            }
        });
    });
});
