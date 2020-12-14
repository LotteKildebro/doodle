setInterval(() => {
    enemyWalk();
}, 1100)

setInterval(() => {
    enemyWalk1();
}, 1000)


setInterval(() => {
    bossWalk();
}, 1000) 

//Fjende
function enemyWalk() {
    let rand = Math.floor(Math.random() * 2) + 1;

    if (rand == 2) { //down
        if (maze[enemyPosition.y - 1][enemyPosition.x] === road) {
            maze[enemyPosition.y - 1][enemyPosition.x] = enemy
            maze[enemyPosition.y][enemyPosition.x] = road
        }
    } else if (rand == 1) { //up
        if (maze[enemyPosition.y + 1][enemyPosition.x] === road) {
            maze[enemyPosition.y + 1][enemyPosition.x] = enemy
            maze[enemyPosition.y][enemyPosition.x] = road
        }
    }

    drawMaze();
}

function enemyWalk1() {
    let rand = Math.floor(Math.random() * 2) + 1;
    if (levelcheck == 2 || levelcheck == 3) {
        if (rand == 2) { //down
            if (maze[enemyPosition1.y - 1][enemyPosition1.x] === road) {
                maze[enemyPosition1.y - 1][enemyPosition1.x] = enemy1
                maze[enemyPosition1.y][enemyPosition1.x] = road
            }
        } else if (rand == 1) { //up
            if (maze[enemy  From Sara A to Everyone: (10: 42 AM)  let enemyPosition = {
                        x: 0,
                        y: 0
                    };
                    let enemyPosition1 = {
                        x: 0,
                        y: 0
                    };
                    let bossPosition = {
                        x: 0,
                        y: 0
                    }; 


                    function enemyWalk1() {
                        let rand = Math.floor(Math.random() * 2) + 1;
                        if (levelcheck == 2 || levelcheck == 3) {
                            if (rand == 2) { //down
                                if (maze[enemyPosition1.y - 1][enemyPosition1.x] === road) {
                                    maze[enemyPosition1.y - 1][enemyPosition1.x] = enemy1
                                    maze[enemyPosition1.y][enemyPosition1.x] = road
                                }
                            } else if (rand == 1) { //up
                                if (maze[enemyPosition1.y + 1][enemyPosition1.x] === road) {
                                    maze[enemyPosition1.y + 1][enemyPosition1.x] = enemy1
                                    maze[enemyPosition1.y][enemyPosition1.x] = road
                                }
                            }
                        }

                        drawMaze();
                    } 

                    function bossWalk() {
                        let rand = Math.floor(Math.random() * 2) + 1;

                        if (rand == 2) { //right
                            if (maze[bossPosition.y][bossPosition.x + 1] === road) {
                                maze[bossPosition.y][bossPosition.x + 1] = boss
                                maze[bossPosition.y][bossPosition.x] = road
                            }
                        } else if (rand == 1) { //up
                            if (maze[bossPosition.y][bossPosition.x - 1] === road) {
                                maze[bossPosition.y][bossPosition.x - 1] = boss
                                maze[bossPosition.y][bossPosition.x] = road
                            }
                        }

                        drawMaze();
                    }