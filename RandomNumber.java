
package infobyte_task;
import java.util.Random;
import java.util.Scanner;
import javax.swing.JOptionPane;

class Game {
    private int score = 0;
    int limit = 3;

    public void rules() {
        System.out.println("----------------------------Rules and Regulation-------------------------");
        System.out.println("1. As per your choice you choose number of rounds");
        System.out.println("2. Each round have 5 chance ");
        System.out.println("      -> If guessing number is equal to random number you get 3 point \n");
        System.out.println("      -> If guessing number is less than random number you get 1 point \n");
        System.out.println("      -> If guessing number is greater than random number you get 2 point \n");
        System.out.println("-------------------------------------------------------------------------");

    }

    public int round() {
        int roundNumber = Integer.parseInt(JOptionPane.showInputDialog(null, "Enter Number of rounds :"));
        return roundNumber;
    }

    public void randomGame() {
        Random rand = new Random();

        int round = this.round();
        for (int i = 1; i <= round; i++) {
            JOptionPane.showMessageDialog(null, "Round " + i + " Start", "", JOptionPane.INFORMATION_MESSAGE);
            while (limit > 0) {
                System.out.println("------------------------------");

                int randNUmber = rand.nextInt(100);
                int userNumber = Integer.parseInt(JOptionPane.showInputDialog(null, "Enter guessing Number :"));

                System.out.println("Random number " + randNUmber + " \nGuesssing number " + userNumber);

                if (randNUmber == userNumber) {
                    score = score + 5;

                } else if (randNUmber < userNumber) {
                    score = score + 2;

                } else {
                    score = score + 1;
                }
                limit--;
            }
            limit = 3;
        }
        JOptionPane.showMessageDialog(null, "Total Score : " + score, "Score Board", JOptionPane.INFORMATION_MESSAGE);
        System.out.println("------------------------------");
    }
}

public class RandomNumber {
    public static void main(String[] args) {

        Game gameObj = new Game();
        gameObj.rules();
        gameObj.randomGame();

    }
}
