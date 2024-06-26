document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('hospitals-nav').addEventListener('click', function(event) {
        event.preventDefault();
        var hospitalsList = document.getElementById('hospitals-list');
        hospitalsList.classList.toggle('visible');
        hospitalsList.classList.toggle('hidden');
    });

    document.getElementById('departments-nav').addEventListener('click', function(event) {
        event.preventDefault();
        var departmentsList = document.getElementById('departments-list');
        departmentsList.classList.toggle('visible');
        departmentsList.classList.toggle('hidden');
    });
});
