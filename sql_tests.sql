INSERT INTO times (location_id)
			SELECT locations.id
			FROM (SELECT id FROM locations WHERE name = '$new_loc') locations
			WHERE 1=1;