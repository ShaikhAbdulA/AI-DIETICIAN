const API_KEY = "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"; // Paste your API key here
const  submitButton= document.querySelector('.submit')
const  outputElement=document.querySelector('#output')
const  inputElement=document.querySelector('input')
const  historyElement = document.querySelector('.history')

async function getMessage(){
    console.log('clicked')  
    const options={
        method:'POST',
        headers:{
            "Authorization": `Bearer ${API_KEY}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            model: "gpt-3.5-turbo",
            messages:[{role:"user",content:inputElement.value}],
            max_tokens: 2048,
        })
    }
    try{
       const response= await fetch("https://api.openai.com/v1/chat/completions", options)
        const data=await response.json()
        console.log(data)
        outputElement.textContent=  data.choices[0].message.content
        if (data.choices[0].message.content){
            const pElement = document.createElement('p')
            pElement.textContent=inputElement.value
            historyElement,append(pElement)
        }
    }catch(error){
        comsole.error(error)
      }
}

submitButton.addEventListener('click',getMessage)