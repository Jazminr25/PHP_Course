class Ship {
    Name;
    Speed;
    HardPoints;
    Cargo;
    Cost;
    Image;
    Armor;

    constructor(n, s, h, c, co, i) {
        this.Name = n;
        this.Speed = s;
        this.HardPoints = h;
        this.Cargo = c;
        this.Cost = co;
        this.Image = i;
        this.Armor = 100;
    }

    DisplayShip(divtag) {
        divtag.innerHTML = "";
        var displayString = "<table><tr><td>Name</td><td>" + this.Name + "</td></tr>";
        displayString += "<tr><td>Speed</td><td>" + this.Speed + "</td></tr>";
        displayString += "<tr><td>Weapon Hard Points</td><td>" + this.HardPoints + "</td></tr>";
        displayString += "<tr><td>Cargo Space in Tonnes</td><td>" + this.Cargo + "</td></tr>";
        displayString += "<tr><td>Cost in Intergalatic Credits</td><td>" + this.Cost + "</td></tr>";
        displayString += "<tr><td>Armor</td><td>" + this.Armor + "</td></tr>";
        displayString += "<tr><td colspan='2'><img src='imgs/" + this.Image + "' alt=''></td></tr></table>";
        divtag.innerHTML = displayString
        return true;
    }
}


