<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php
include 'Database.php';
class ManageSubscribtion
{
    public function addsubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="INSERT INTO subscribed values ('$SubscriberID','$ChannelID',0)";
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
    public function deletesubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="DELETE FROM subscribed WHERE SubscriberID='$SubscriberID' and ChannelID='$ChannelID'";
        if ($conn->query($query) === TRUE) {
            echo "record Deleted successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
}
=======
<?php
require_once 'Database.php';
require_once '../Model/Subscriber.php';
class ManageSubscribtion
{
  /*  public function addsubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="INSERT INTO subscribed values ('$SubscriberID','$ChannelID',0)";
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
    public function deletesubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="DELETE FROM subscribed WHERE SubscriberID='$SubscriberID' and ChannelID='$ChannelID'";
        if ($conn->query($query) === TRUE) {
            echo "record Deleted successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
    public function toggleSubscription($subscriberID, $channelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        // Check if the record already exists
        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            // If the record exists, delete it
            $deleteQuery = "DELETE FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
            if ($conn->query($deleteQuery) === TRUE) {
                echo "Subscription cancelled successfully";
            } else {
                echo "Error: " . $deleteQuery . "<br>" . $conn->error;
            }
        } else {
            // If the record doesn't exist, add it
            $addQuery = "INSERT INTO subscribed VALUES ('$subscriberID','$channelID',0)";
            if ($conn->query($addQuery) === TRUE) {
                echo "Subscription added successfully";
            } else {
                echo "Error: " . $addQuery . "<br>" . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
    } */
    public function deleteSubscription($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $deleteQuery = "DELETE FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        if ($conn->query($deleteQuery) === TRUE) {
            echo "Subscription cancelled successfully";
        } else {
            echo "Error: " . $deleteQuery . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function addNewSubscription($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $addQuery = "INSERT INTO subscribed VALUES ('$subscriberID','$channelID',0)";
 
        if ($conn->query($addQuery) === TRUE) {
            echo "Subscription added successfully";
        } else {
            echo "Error: " . $addQuery . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function addNewNotification($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $sub = new Subscriber ;
        
        $sub->subs3($channelID,$subscriberID);

        $conn->close();
    }

    public function checkIfSubscribed($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        $conn->close();

        return $result->num_rows > 0;
    }

    public function toggleSubscription($subscriberID, $channelID) {
        $isSubscribed = $this->checkIfSubscribed($subscriberID, $channelID);

        if ($isSubscribed) {
            $this->deleteSubscription($subscriberID, $channelID);
        } else {
            $this->addNewSubscription($subscriberID, $channelID);
            $this->addNewNotification($subscriberID, $channelID);
        }
    }

}
>>>>>>> Stashed changes
=======
<?php
require_once 'Database.php';
require_once '../Model/Subscriber.php';
class ManageSubscribtion
{
  /*  public function addsubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="INSERT INTO subscribed values ('$SubscriberID','$ChannelID',0)";
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
    public function deletesubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="DELETE FROM subscribed WHERE SubscriberID='$SubscriberID' and ChannelID='$ChannelID'";
        if ($conn->query($query) === TRUE) {
            echo "record Deleted successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
    public function toggleSubscription($subscriberID, $channelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        // Check if the record already exists
        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            // If the record exists, delete it
            $deleteQuery = "DELETE FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
            if ($conn->query($deleteQuery) === TRUE) {
                echo "Subscription cancelled successfully";
            } else {
                echo "Error: " . $deleteQuery . "<br>" . $conn->error;
            }
        } else {
            // If the record doesn't exist, add it
            $addQuery = "INSERT INTO subscribed VALUES ('$subscriberID','$channelID',0)";
            if ($conn->query($addQuery) === TRUE) {
                echo "Subscription added successfully";
            } else {
                echo "Error: " . $addQuery . "<br>" . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
    } */
    public function deleteSubscription($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $deleteQuery = "DELETE FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        if ($conn->query($deleteQuery) === TRUE) {
            echo "Subscription cancelled successfully";
        } else {
            echo "Error: " . $deleteQuery . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function addNewSubscription($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $addQuery = "INSERT INTO subscribed VALUES ('$subscriberID','$channelID',0)";
        if ($conn->query($addQuery) === TRUE) {
            echo "Subscription added successfully";
        } else {
            echo "Error: " . $addQuery . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function addNewNotification($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $sub = new Subscriber ;
        
        $sub->subs3($channelID,$subscriberID);

        $conn->close();
    }

    public function checkIfSubscribed($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        $conn->close();

        return $result->num_rows > 0;
    }

    public function toggleSubscription($subscriberID, $channelID) {
        $isSubscribed = $this->checkIfSubscribed($subscriberID, $channelID);

        if ($isSubscribed) {
            $this->deleteSubscription($subscriberID, $channelID);
        } else {
            $this->addNewSubscription($subscriberID, $channelID);
            $this->addNewNotification($subscriberID, $channelID);
        }
    }

        public function toggleBell($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            $subscription = $result->fetch_assoc();
            $bell = $subscription['bell'] == 1 ? 0 : 1;

            $updateQuery = "UPDATE subscribed SET bell='$bell' WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
            $conn->query($updateQuery);
        } else {
            $bell = 1;
            $insertQuery = "INSERT INTO subscribed (SubscriberID, ChannelID, bell) VALUES ('$subscriberID', '$channelID', '$bell')";
            $conn->query($insertQuery);
        }

        $conn->close();
    }

}
>>>>>>> Stashed changes
=======
<?php
require_once 'Database.php';
require_once '../Model/Subscriber.php';
class ManageSubscribtion
{
  /*  public function addsubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="INSERT INTO subscribed values ('$SubscriberID','$ChannelID',0)";
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
    public function deletesubscription($SubscriberID,$ChannelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        $query ="DELETE FROM subscribed WHERE SubscriberID='$SubscriberID' and ChannelID='$ChannelID'";
        if ($conn->query($query) === TRUE) {
            echo "record Deleted successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

// Close the database connection
        $conn->close();
    }
    public function toggleSubscription($subscriberID, $channelID)
    {
        $database = new Database();
        $conn = $database->getConn();

        // Check if the record already exists
        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            // If the record exists, delete it
            $deleteQuery = "DELETE FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
            if ($conn->query($deleteQuery) === TRUE) {
                echo "Subscription cancelled successfully";
            } else {
                echo "Error: " . $deleteQuery . "<br>" . $conn->error;
            }
        } else {
            // If the record doesn't exist, add it
            $addQuery = "INSERT INTO subscribed VALUES ('$subscriberID','$channelID',0)";
            if ($conn->query($addQuery) === TRUE) {
                echo "Subscription added successfully";
            } else {
                echo "Error: " . $addQuery . "<br>" . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
    } */
    public function deleteSubscription($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $deleteQuery = "DELETE FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        if ($conn->query($deleteQuery) === TRUE) {
            echo "Subscription cancelled successfully";
        } else {
            echo "Error: " . $deleteQuery . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function addNewSubscription($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $addQuery = "INSERT INTO subscribed VALUES ('$subscriberID','$channelID',0)";
        if ($conn->query($addQuery) === TRUE) {
            echo "Subscription added successfully";
        } else {
            echo "Error: " . $addQuery . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function addNewNotification($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $sub = new Subscriber ;
        
        $sub->subs3($channelID,$subscriberID);

        $conn->close();
    }

    public function checkIfSubscribed($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        $conn->close();

        return $result->num_rows > 0;
    }

    public function toggleSubscription($subscriberID, $channelID) {
        $isSubscribed = $this->checkIfSubscribed($subscriberID, $channelID);

        if ($isSubscribed) {
            $this->deleteSubscription($subscriberID, $channelID);
        } else {
            $this->addNewSubscription($subscriberID, $channelID);
            $this->addNewNotification($subscriberID, $channelID);
        }
    }

        public function toggleBell($subscriberID, $channelID) {
        $database = new Database();
        $conn = $database->getConn();

        $checkQuery = "SELECT * FROM subscribed WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            $subscription = $result->fetch_assoc();
            $bell = $subscription['bell'] == 1 ? 0 : 1;

            $updateQuery = "UPDATE subscribed SET bell='$bell' WHERE SubscriberID='$subscriberID' AND ChannelID='$channelID'";
            $conn->query($updateQuery);
        } else {
            $bell = 1;
            $insertQuery = "INSERT INTO subscribed (SubscriberID, ChannelID, bell) VALUES ('$subscriberID', '$channelID', '$bell')";
            $conn->query($insertQuery);
        }

        $conn->close();
    }

}
>>>>>>> Stashed changes
