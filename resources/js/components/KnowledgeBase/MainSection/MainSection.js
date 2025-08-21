import { Card, Flex, Grid, Text } from "@mantine/core";
import { getImage } from "../../../utils/getImage";

export const MainSection = () => {
  return (
    <div className="knowledge-container">
      <Flex
        className="main-section-position"
        mt={40}
        mb={50}
        direction="column"
      >
        <Text className="main-section-caption" mb={20}>
          Помощь по основным разделам
        </Text>
        <Grid className="w-100" p={0} gutter={20}>
          <Grid.Col
            className="main-card-col"
            key={14}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${14}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Асосӣ")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Асосӣ</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Чӣ тавр иҷроиши умумии мағозаҳоро пайгирӣ кардан мумкин аст
                </Text>
                <Text className="main-text">
                  Шарҳи ченакҳои мағоза: омори фурӯш, даромад, ҳисобҳо, ҳамоҳангсозӣ, тағирот
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col
            className="main-card-col"
            key={3}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${3}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Ҳисоботҳо:")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Ҳисоботҳо:</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Чӣ тавр ҳисоб кардани фоида ва самаранокии фурӯш
                </Text>
                <Text className="main-text">
                  Воситаҳо барои таҳлил ва назорати тиҷорат: ҳисобот дар бораи фурӯш, смена, фоида, тахфиф
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col
            className="main-card-col"
            key={9}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${9}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("ПродаФурӯшжи")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Фурӯш</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Чӣ тавр гузаронидани фурӯши аввалини онлайн
                </Text>
                <Text className="main-text">
                  Назорати фурӯш тавассути касса ва кабинети шахсӣ, молҳои бекоршуда, тартиби баргардонидан
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col
            className="main-card-col"
            key={15}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${15}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Харидҳо")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Харидҳо</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Фарқи байни қабул ва қабули зуд чӣ гуна аст
                </Text>
                <Text className="main-text">
                  Қабули молҳо, баргардонидани молҳо ва пайгирӣ кардани пардохтҳо барои назорати харид
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
        </Grid>
      </Flex>
    </div>
  );
};
