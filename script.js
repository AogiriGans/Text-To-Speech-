function synthesizeSpeech() {
    const text = document.getElementById('text').value;
    const language = document.getElementById('language').value;

    if (!text) {
        alert('Please enter text to synthesize.');
        return;
    }

    const utterance = new SpeechSynthesisUtterance(text);
    utterance.lang = language;

    utterance.onend = function() {
        const audio = document.getElementById('audio');
        const downloadLink = document.getElementById('download-link');
        audio.src = audioSrc;
        downloadLink.href = audioSrc;
        downloadLink.style.display = 'block';
    };

    speechSynthesis.speak(utterance);

    const audioSrc = URL.createObjectURL(new Blob([text], { type: 'audio/mp3' }));
}