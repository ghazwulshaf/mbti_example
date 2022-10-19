function addQuestionPoint() {
    const point_a = document.getElementById('point_a');
    const point_b = document.getElementById('point_b');
    const point_c = document.getElementById('point_c');
    const point_d = document.getElementById('point_d');
    const point_e = document.getElementById('point_e');
    const point_f = document.getElementById('point_f');
    const point_g = document.getElementById('point_g');

    if(point_a.value == 0) {
        point_b.value = 1;
        point_c.value = 2;
        point_d.value = 3;
        point_e.value = 4;
        point_f.value = 5;
        point_g.value = 6;
    } else if(point_a.value == 6) {
        point_b.value = 5;
        point_c.value = 4;
        point_d.value = 3;
        point_e.value = 2;
        point_f.value = 1;
        point_g.value = 0;
    }
}
