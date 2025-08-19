#include <iostream>
#include <string>
#include <vector>
#include <cstdlib>
#include <algorithm>
#include <random>
using namespace std;


class Person {
    public:
        Person(const string& name, const string& email, const string& description) : name(name), email(email), wants(description) {}

        string name;
        string email;
        string wants;
};


std::vector<Person> generatePeople() {
    vector<Person> people;
    
    people.push_back(Person("Person1", "person1@yahoo.com", "Dear Santa, Please bring me a potato. Thanks Santa Claus"));
    people.push_back(Person("Person2", "person2@gmail.com", "Dear Santa, Please may I have a tomato for Christmas. Thank-you"));
    people.push_back(Person("Person3", "person3@gmail.com", "Dear Santa, Please may I have a tree for Christmas. Thank-you"));
    return people;
}

bool isInvalidPair(const Person& person1, const Person& person2) {
    if ((person1.name == "Person1" && person2.name == "Person2") || (person1.name == "Person2" && person2.name == "Person3") || (person1.name == person2.name )){
        return true;
    }

    return false;
}

vector<pair<Person, Person>> generatePairs(const vector<Person>& giver, const vector<Person>& reciever) {
    vector<pair<Person, Person>> pairs;

    vector<Person> shuffledgiver = giver;
    vector<Person> shuffledreiver = reciever;

    random_device rd;
    mt19937 g(rd());

    std::shuffle(shuffledgiver.begin(), shuffledgiver.end(), g);
    std::shuffle(shuffledreiver.begin(), shuffledreiver.end(), g);

      
    for (size_t i = 0; i < shuffledgiver.size(); ++i) {
        if (!isInvalidPair(shuffledgiver[i], shuffledreiver[i])){
            pairs.emplace_back(shuffledgiver[i], shuffledreiver[i]);
        } else {
            vector<pair<Person, Person>> p;
            return p;
        }
    }
    return pairs;
}


int main() {
    vector<Person> giver = generatePeople();
    vector<Person> reciever = generatePeople();

    vector<pair<Person, Person>> pairs;

    const int maxRetries = 50;  // Set your maximum number of retries here

    for (int retry = 0; retry < maxRetries; ++retry) {
        pairs = generatePairs(giver, reciever);

        if (pairs.size() == giver.size()) {
            // Display the generated pairs
            for (const auto& pair : pairs) {
                cout << pair.first.email << endl;
                cout << "Hi " << pair.first.name << "," << endl;
                cout << "For the Secret Santa exchange you are buying for: " << pair.second.name << endl;
                cout << "Here is " << pair.second.name << "'s letter to santa."<< endl;
                cout << pair.second.wants << endl;
                cout << "Merry Christmas!! Love you all" << endl << endl;
            }

            break;  // Exit the loop if valid pairs are generated
        } else {
            std::cerr << "Retrying...\n";
        }
    }

    return 1;
}

