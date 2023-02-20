package test;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.boot.registry.*;
import org.hibernate.cfg.Configuration;

public class App {
    public static void main(String[] args) {

        // Create SessionFactory
        Configuration configuration = new Configuration().configure();
        StandardServiceRegistryBuilder builder = new StandardServiceRegistryBuilder()
                .applySettings(configuration.getProperties());
        SessionFactory sessionFactory = configuration.buildSessionFactory(builder.build());

        // Create Session
        Session session = sessionFactory.openSession();

        // Start a Transaction
        Transaction transaction = session.beginTransaction();

        // CRUD
        Produit p = new Produit();

        // Destroy The Session
        transaction.commit();
        session.close();
    }
}
