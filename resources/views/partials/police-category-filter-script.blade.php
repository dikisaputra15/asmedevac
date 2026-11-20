const policeCategoryAliases = {
    'province / territory': 'police sub station',
    'municipality / locality': 'police post',
    'township police station': 'specialized unit'
};

function matchesPoliceCategory(police, categories) {
    if (categories.length === 0) return true;

    const policeCategories = (police.category || '').split(',').map(category => {
        const normalized = category.trim().toLowerCase();
        return policeCategoryAliases[normalized] ?? normalized;
    });
    return categories.some(category => policeCategories.includes(category.toLowerCase()));
}

function updatePoliceCategoryCounts(container, police) {
    container.querySelectorAll('[data-police-category-count]').forEach(badge => {
        badge.textContent = police.filter(item => matchesPoliceCategory(item, [badge.dataset.policeCategoryCount])).length;
    });
}
