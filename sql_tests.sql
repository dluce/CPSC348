UPDATE times SET time1=0, troop_number1 = 0
				WHERE location_id = 
					(SELECT id FROM locations WHERE name = 'Candyland')
				AND day_of = 'Saturday';