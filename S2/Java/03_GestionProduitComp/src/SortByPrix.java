import java.util.Comparator;

public class SortByPrix implements Comparator<Produit> {

    @Override
    public int compare(Produit p1, Produit p2) {
        if (p1.getPrixUnit() > p1.getPrixUnit()) {
            return 1;
        } else if (p1.getPrixUnit() < p1.getPrixUnit()) {
            return -1;
        } else {
            return 0;
        }
    }

}
