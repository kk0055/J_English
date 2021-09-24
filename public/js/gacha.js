//dblclickで出すイベント
const loveMe = document.querySelector('.awesomeEvent')

loveMe.addEventListener('dblclick', (e) => {
    createAwesome(e)
})

  const createAwesome = (e) => {

  const awesomeBtn  = document.createElement('i')
  awesomeBtn.innerText = 'Genius★'
  awesomeBtn.classList.add('fas')
  awesomeBtn.classList.add('fa-star')
  const x = e.pageX
  const y = e.pageY

  awesomeBtn.style.top = `${y}px`
  awesomeBtn.style.left = `${x}px`

  loveMe.appendChild(awesomeBtn)
}
