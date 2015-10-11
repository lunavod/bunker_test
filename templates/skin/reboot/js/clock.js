function nextEpisode()
{
    var newEpisode = new Date();
    newEpisode.setUTCDate(newEpisode.getUTCDate()+6-newEpisode.getUTCDay());
    newEpisode.setUTCHours(15); newEpisode.setUTCMinutes(30); newEpisode.setUTCSeconds(0);

    var totalRemains = (newEpisode.getTime()-new Date().getTime());
    if (totalRemains>1)
    {
        var RemainsSec=(parseInt(totalRemains/1000));
        var RemainsFullDays=(parseInt(RemainsSec/(24*60*60)));
        if (
            RemainsFullDays==2 ||
            RemainsFullDays==3 ||
            RemainsFullDays==4 ||
            RemainsFullDays==22 ||
            RemainsFullDays==23 ||
            RemainsFullDays==24 ||
            RemainsFullDays==32 ||
            RemainsFullDays==33 ||
            RemainsFullDays==34
        ) {
            days=" дня "
        }
        else if (
            RemainsFullDays==1 ||
            RemainsFullDays==21 ||
            RemainsFullDays==31
        ) {
            days=" день "
        }
        else {
        days=" дней "
        }
        var secInLastDay=RemainsSec-RemainsFullDays*24*3600;
        var RemainsFullHours=(parseInt(secInLastDay/3600));
        if (RemainsFullHours<10){RemainsFullHours="0"+RemainsFullHours};
        var secInLastHour=secInLastDay-RemainsFullHours*3600;
        var RemainsMinutes=(parseInt(secInLastHour/60));
        if (RemainsMinutes<10){RemainsMinutes="0"+RemainsMinutes};
        var lastSec=secInLastHour-RemainsMinutes*60;
        if (lastSec<10){lastSec="0"+lastSec};
        document.getElementById('nextepisode').innerHTML = "<p>До серии осталось: "+RemainsFullDays+days+RemainsFullHours+":"+RemainsMinutes+":"+lastSec+"</p>";
        setTimeout("nextEpisode()",100);
    }
}
nextEpisode();
