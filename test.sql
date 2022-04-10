

SELECT b.NAME as Broker_Name, COUNT(c.ID) as Customer_Count 
FROM BROKER b, CUSTOMER c 
WHERE b.ID=c.BROKER_ID 
GROUP BY b.NAME 
ORDER BY Customer_Count DESC, Broker_Name;


---------- Assumptions--------
-- SQLite syntax was used while testing
-- table name were in uppercase i.e BROKER and CUSTOMER as shown above respective tables
-- Heading are given to their meaning
-- sorting is first by count and then broker's name alphabetically.