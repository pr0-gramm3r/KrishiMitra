const p = document.querySelectorAll(".lang p");

p.forEach(btn => {
    btn.addEventListener('click', function () {
        // move globe to clicked element
        const globe = document.querySelector('.lang .fa-globe');
        this.insertBefore(globe, this.firstChild);

        // swap active class
        p.forEach((e) =>{
                e.classList.remove('active');
            }); 
        btn.classList.add('active');
    
    });
});


const ctx = document.querySelector("#MarketPriceTrend");

new Chart(ctx, {
    type: "line",
    data: {
        labels: ["10 Jun", "11 Jun", "12 Jun", "13 Jun", "14 Jun", "15 Jun", "16 Jun"],
        datasets: [
            {
                label: "Wheat",
                data: [1850, 2000, 2150, 2100, 1950, 2100, 2125], // fluctuating values
                borderColor: "#22c55e",        // green line
                backgroundColor: "rgba(34, 197, 94, 0.15)", // light green fill
                fill: true,
                tension: 0.4,                  // makes the line curved/smooth
                pointRadius: 4,
                pointBackgroundColor: "#22c55e",
                pointBorderColor: "#fff",
                pointBorderWidth: 2,
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false   // reference chart hides the legend box
            },
            tooltip: {
                enabled: true
            }
        },
        scales: {
            y: {
                beginAtZero: false,
                ticks: {
                    callback: function(value) {
                        return "₹" + value.toLocaleString();
                    }
                },
                grid: {
                    color: "#f0f0f0"
                }
            },
            x: {
                grid: {
                    display: false
                }
            }
        }
    }
});