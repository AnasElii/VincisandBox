public class Client {
    private static int id = 0;
    private String nom;
    private String adresse;
    private String tel;

    Client(String nom, String adresse, String tel) {
        id++;
        this.nom = nom;
        this.adresse = adresse;
        this.tel = tel;
    }

    int GetID() {
        return id;
    }

    String GetNom() {
        return nom;
    }

    void SetName(String nom) {
        this.nom = nom;
    }

    String GetAdresse() {
        return adresse;
    }

    void SetAdresse(String adresse) {
        this.adresse = adresse;
    }

    String GetTel() {
        return tel;
    }

    void SetTel(String tel) {
        this.tel = tel;
    }

}
