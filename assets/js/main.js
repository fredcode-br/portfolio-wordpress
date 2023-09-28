const projectsCard = document.querySelectorAll('.card-project');
const servicesCard = document.querySelectorAll('.card-service');

const SCROLL_OFFSET = 200;
const ACTIVE_SCROLL_CSS_CLASS = 'active';

const $sections = [...document.querySelectorAll('[data-scroll]')];
const $linksToScroll = [...document.querySelectorAll('[data-scroll-to]')];

function desactiveAllElements() {
    $linksToScroll.forEach(($link) => (
        $link.classList.remove(ACTIVE_SCROLL_CSS_CLASS)
    ));
}

function activeElement(dataScroll) {
    const $linkFound = $linksToScroll
        .find(($link) => $link.getAttribute('data-scroll-to') === dataScroll);

    desactiveAllElements();

    $linkFound.classList.add(ACTIVE_SCROLL_CSS_CLASS);
}

function handleScrollTo(event) {
    event.preventDefault();

    const dataScroll = event.currentTarget.getAttribute('data-scroll-to');
    const $section = document.querySelector(`[data-scroll="${dataScroll}"]`);

    if (!$section) {
        return;
    }

    $section.scrollIntoView({ behavior: 'instant', block: 'center' });
}

function handleScroll() {
    $sections.forEach(($section) => {
        const sectionTop = $section.offsetTop - SCROLL_OFFSET;

        if (scrollY >= sectionTop) {
            const dataScroll = $section.getAttribute('data-scroll');

            activeElement(dataScroll);
        }
    });
}

$linksToScroll.forEach(($element) => {
    $element.addEventListener('click', handleScrollTo);
});

window.addEventListener('scroll', handleScroll);


function animateCards(cards){
    cards.forEach((card, index) => {
        card.style.animation
        ? (card.style.animation = "")
        : (card.style.animation = `animX 3s ease forwards 
        ${index / 7 + 0.3}s`);
    });
}

animateCards(projectsCard);
animateCards(servicesCard);
