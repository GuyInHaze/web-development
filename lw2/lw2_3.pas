PROGRAM PrintHello(INPUT, OUTPUT);
USES
  DOS;
VAR
  Query, namec: STRING;
  L, Temp: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnV('QUERY_STRING');
  namec := copy(Query, 0, 4);
  IF namec = 'name'
  THEN
    BEGIN
      L := Length(Query);
      Temp := L - 4;
      Query := copy(Query, 6, Temp);
      WRITELN('HELLO DEAR ', Query)
    END
  ELSE
    WRITELN('HELLO ANONYMUS')
END.
