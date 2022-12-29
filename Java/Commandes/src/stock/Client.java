package stock;

public class Client {
    private int id;
    private String nom;
    private String adresse;
    private String tel;

    private static int staticID = 0;

    public Client() {
    }

    Client(String nom, String adresse, String tel) {
        this.id = staticID + 1;
        this.nom = nom;
        this.adresse = adresse;
        this.tel = tel;
    }

    public int GetID() {
        return id;
    }

    public String GetNom() {
        return nom;
    }

    public void SetName(String nom) {
        this.nom = nom;
    }

    public String GetAdresse() {
        return adresse;
    }

    public void SetAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String GetTel() {
        return tel;
    }

    public void SetTel(String tel) {
        this.tel = tel;
    }

}
