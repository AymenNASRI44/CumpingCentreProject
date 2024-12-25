// public/js/charts.js

document.addEventListener("DOMContentLoaded", function() {
    // Graphique Utilisateurs par Région
    const usersByRegionData = {
        labels: JSON.parse(document.getElementById('regions').textContent), // Les noms des régions
        datasets: [{
            label: 'Utilisateurs',
            backgroundColor: ['#f46e3f', '#1cffee', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
            borderColor: '#ffffff',
            borderWidth: 1,
            data: JSON.parse(document.getElementById('userCounts').textContent) // Les nombres d'utilisateurs par région
        }]
    };

    const usersByRegionOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: false
            }
        }
    };

    new Chart(document.getElementById('usersByRegionChart'), {
        type: 'bar',
        data: usersByRegionData,
        options: usersByRegionOptions
    });

    // Graphique Répartition des Réservations par Lieu
    const resparlieuData = {
        labels: JSON.parse(document.getElementById('lieuNames').textContent), // Les noms des lieux
        datasets: [{
            label: 'Utilisateurs',
            backgroundColor: ['#b8f43f', '#f56954', '#3ff4e6', '#b8f43f', '#f46e3f', '#3fd3f4'],
            borderColor: '#ffffff',
            borderWidth: 1,
            data: JSON.parse(document.getElementById('reservationCounts').textContent) // Les nombres de réservations par lieu
        }]
    };

    const resparlieuOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: false
            }
        }
    };

    new Chart(document.getElementById('resparlieuChart'), {
        type: 'pie',
        data: resparlieuData,
        options: resparlieuOptions
    });
});