package demo;

import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;
import org.apache.logging.log4j.core.config.Configurator; 

public class One {
    private static final Logger log = LogManager.getLogger(One.class);

    public static void main(String[] args) { 
  //	System.out.println("Log4j2 Configuration File: " + System.getProperty("log4j.configurationFile"));

        log.debug("Debug Message");
        log.info("Info Message");
        log.warn("Warning Message");
        log.error("Error Message");
        log.fatal("Fatal Message");
    }
}
