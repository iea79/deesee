function countdown() {
    const counter = $('.dayCounter');
    const hour = $('.hours');
    const minute = $('.minutes');
    const second = $('.seconds');
    const deadline = new Date();

    if (!counter.length) {
        return false;
    }

    let endTime;
    deadline.setHours(0,0,0,0);
    deadline.setDate(deadline.getDate() + 1);

    counter.hide();

    function update() {
        const current = new Date();
        endTime = deadline.getTime() - current.getTime();

        const h = Math.floor(endTime/1000/60/60);
        const m = Math.floor((endTime-h*60*60*1000)/1000/60);
        const s = Math.floor(((endTime-h*60*60*1000)-m*60*1000)/1000);

        hour.html(h < 10 ? '0'+h : h);
        minute.html(m < 10 ? '0'+m : m);
        second.html(s < 10 ? '0'+s : s);
        counter.show();
    }

    const interval = setInterval(function () {
        update();
    }, 1000);

    if (endTime <= 0) {
        counter.hide();
        clearInterval(interval);
    }
}
countdown();
