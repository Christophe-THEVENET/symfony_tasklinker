document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.js-choice').forEach(function (element) {
        new Choices(element, {
            removeItemButton: true, // Affiche la croix pour retirer un élément sélectionné
            searchEnabled: true, // Active la recherche
            placeholder: true,
            placeholderValue: element.getAttribute('placeholder') || ''
        });
    });
});
