
package infobyte_task;

import java.util.Scanner;
import java.util.ArrayList;
import java.util.List;

class User {
    private String userId;
    private String userPin;

    public User(String userId, String userPin) {
        this.userId = userId;
        this.userPin = userPin;
    }

    public String getUserId() {
        return userId;
    }

    public String getUserPin() {
        return userPin;
    }
}

class Account {
    private String accountNumber;
    private double balance;
    private List<String> transactionHistory;

    public Account(String accountNumber) {
        this.accountNumber = accountNumber;
        this.balance = 0.0;
        this.transactionHistory = new ArrayList<>();
    }

    public String getAccountNumber() {
        return accountNumber;
    }

    public double getBalance() {
        return balance;
    }

    public List<String> getTransactionHistory() {
        return transactionHistory;
    }

    public void deposit(double amount) {
        balance += amount;
        transactionHistory.add("Deposited: $" + amount);
    }

    public void withdraw(double amount) {
        if (balance >= amount) {
            balance -= amount;
            transactionHistory.add("Withdrawn: $" + amount);
        } else {
            System.out.println("Insufficient funds!");
        }
    }

    public void transfer(Account recipient, double amount) {
        if (balance >= amount) {
            balance -= amount;
            recipient.deposit(amount);
            transactionHistory.add("Transferred: $" + amount + " to " + recipient.getAccountNumber());
        } else {
            System.out.println("Insufficient funds for transfer!");
        }
    }
}

class ATM {
    private User currentUser;
    private Account currentAccount;
    private List<User> users;

    public ATM() {
        this.users = new ArrayList<>();
        // Initialize with some sample users and accounts
        users.add(new User("rishu7185", "1234"));
        users.add(new User("pawan7080", "5678"));
    }

    public void start() {
        System.out.println("Welcome to the ATM");
        Scanner scanner = new Scanner(System.in);

        // User authentication
        System.out.print("Enter User ID: ");
        String userId = scanner.next();
        System.out.print("Enter User PIN: ");
        String userPin = scanner.next();

        if (authenticate(userId, userPin)) {
            System.out.println("Authentication successful.");
            // Get the user's account (you can replace this logic with a database query)
            currentAccount = new Account(userId + "_account");
            // Set the current user
            currentUser = getUserById(userId);
            showMenu(scanner);
        } else {
            System.out.println("Authentication failed. Please try again.");
        }
    }

    private boolean authenticate(String userId, String userPin) {
        for (User user : users) {
            if (user.getUserId().equals(userId) && user.getUserPin().equals(userPin)) {
                return true;
            }
        }
        return false;
    }

    private User getUserById(String userId) {
        for (User user : users) {
            if (user.getUserId().equals(userId)) {
                return user;
            }
        }
        return null;
    }

    private void showMenu(Scanner scanner) {
        while (true) {
            System.out.println("\nATM Menu:");
            System.out.println("1. View Transaction History");
            System.out.println("2. Withdraw");
            System.out.println("3. Deposit");
            System.out.println("4. Transfer");
            System.out.println("5. Quit");
            System.out.print("Enter your choice: ");

            int choice = scanner.nextInt();

            switch (choice) {
                case 1:
                    viewTransactionHistory();
                    break;
                case 2:
                    withdraw(scanner);
                    break;
                case 3:
                    deposit(scanner);
                    break;
                case 4:
                    transfer(scanner);
                    break;
                case 5:
                    System.out.println("Thank you for using the ATM. Goodbye!");
                    return;
                default:
                    System.out.println("Invalid choice. Please choose a valid option.");
            }
        }
    }

    private void viewTransactionHistory() {
        List<String> history = currentAccount.getTransactionHistory();
        System.out.println("Transaction History for " + currentUser.getUserId() + "'s Account:");
        for (String transaction : history) {
            System.out.println(transaction);
        }
    }

    private void withdraw(Scanner scanner) {
        System.out.print("Enter the withdrawal amount: $");
        double amount = scanner.nextDouble();
        currentAccount.withdraw(amount);
    }

    private void deposit(Scanner scanner) {
        System.out.print("Enter the deposit amount: $");
        double amount = scanner.nextDouble();
        currentAccount.deposit(amount);
    }

    private void transfer(Scanner scanner) {
        System.out.print("Enter the recipient's User ID: ");
        String recipientUserId = scanner.next();
        User recipient = getUserById(recipientUserId);

        if (recipient != null) {
            System.out.print("Enter the transfer amount: $");
            double amount = scanner.nextDouble();
            currentAccount.transfer(getUserById(recipientUserId + "_account"), amount);
        } else {
            System.out.println("Recipient User ID not found.");
        }
    }
}

public class Main {
    public static void main(String[] args) {
        ATM atm = new ATM();
        atm.start();
    }
}