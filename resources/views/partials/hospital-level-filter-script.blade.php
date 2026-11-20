function matchesHospitalLevel(hospital, levels) {
    if (levels.length === 0) return true;

    const facilityLevels = (hospital.facility_level || '').split(',').map(level => level.trim().toLowerCase());
    return levels.some(level => facilityLevels.includes(level.toLowerCase()));
}

function updateHospitalLevelCounts(container, hospitals) {
    container.querySelectorAll('[data-hospital-level-count]').forEach(badge => {
        const level = badge.dataset.hospitalLevelCount;
        badge.textContent = hospitals.filter(hospital => matchesHospitalLevel(hospital, [level])).length;
    });
}
