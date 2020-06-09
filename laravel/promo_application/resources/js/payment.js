const toggleDonations = document.querySelector('#toggleDonations')
const closeDonations = document.querySelector('#closeDonations')
const donationView = document.querySelector('.donation-wrapper')
console.log(donationView)

toggleDonations.addEventListener('click', function () {
    donationView.style.display = 'block'
    console.log('clicked')
})

closeDonations.addEventListener('click', function () {
    donationView.style.display = 'none'
    console.log('clicked')
})