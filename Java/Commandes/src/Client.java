public class Client {
    private int id;
    private String nom;
    private String adresse;
    private String tel;

    private static int staticID = 0;

    Client(String nom, String adresse, String tel) {
        this.id = staticID + 1;
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
